<div v-if="errors" v-for="category in errors">
                <div v-for="error in category">
                  <span>{{ error }}</span>
                </div>
</div>

<div v-for="item in items">
  {{ item.text }}
</div>